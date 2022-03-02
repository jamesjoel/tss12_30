import { ComponentFixture, TestBed } from '@angular/core/testing';

import { VideoPresentComponent } from './video-present.component';

describe('VideoPresentComponent', () => {
  let component: VideoPresentComponent;
  let fixture: ComponentFixture<VideoPresentComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ VideoPresentComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(VideoPresentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
