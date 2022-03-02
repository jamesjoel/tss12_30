import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FreeTrailComponent } from './free-trail.component';

describe('FreeTrailComponent', () => {
  let component: FreeTrailComponent;
  let fixture: ComponentFixture<FreeTrailComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FreeTrailComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(FreeTrailComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
